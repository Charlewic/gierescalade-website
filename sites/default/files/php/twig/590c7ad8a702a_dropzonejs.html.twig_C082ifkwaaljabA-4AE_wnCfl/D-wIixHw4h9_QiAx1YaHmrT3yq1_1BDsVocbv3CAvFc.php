<?php

/* modules/dropzonejs/templates/dropzonejs.html.twig */
class __TwigTemplate_5f88cc2610527cc51dda0704ebc01a1530da27cd5c3879e68ca5149c6801dc21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 17
        echo "
<div";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">
    <div class=\"dz-message\">
        <p>";
        // line 20
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["dropzone_description"]) ? $context["dropzone_description"] : null), "html", null, true));
        echo "</p>
        <p>";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["or_text"]) ? $context["or_text"] : null), "html", null, true));
        echo "</p>
        <a href=\"#\" onclick=\"event.preventDefault();\"
           class=\"button\">";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["select_files_button_text"]) ? $context["select_files_button_text"] : null), "html", null, true));
        echo "</a>
    </div>
</div>
";
        // line 26
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["uploaded_files"]) ? $context["uploaded_files"] : null), "html", null, true));
        echo "
";
        // line 27
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
        echo "
";
    }

    public function getTemplateName()
    {
        return "modules/dropzonejs/templates/dropzonejs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 27,  66 => 26,  60 => 23,  55 => 21,  51 => 20,  46 => 18,  43 => 17,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme implementation for the dropzonejs form element.
 *
 * Available variables:
 * - attributes: A list of HTML attributes for the element.
 * - dropzone_description: A message to be displayed in the dropzone field.
 * - or_text: A translatable string of the word 'or'.
 * - select_files_button_text: The text shown on the 'Select files' button.
 * - children: Optional additional rendered elements.
 * - uploaded_files: Hidden element that holds uploaded files.
 *
 * @see template_preprocess_dropzonejs()
 */
#}

<div{{ attributes }}>
    <div class=\"dz-message\">
        <p>{{ dropzone_description }}</p>
        <p>{{ or_text }}</p>
        <a href=\"#\" onclick=\"event.preventDefault();\"
           class=\"button\">{{ select_files_button_text }}</a>
    </div>
</div>
{{ uploaded_files }}
{{ children }}
";
    }
}
