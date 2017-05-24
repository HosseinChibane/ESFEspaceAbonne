<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_4e3e763e7b9b823ee182fc92831df2124e67b808f5ac81dd9d2e14365ec2c33b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b54313116c7763d5efd2da68d95130653e613593df30d5dc5a962af8c40dc1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b54313116c7763d5efd2da68d95130653e613593df30d5dc5a962af8c40dc1d->enter($__internal_7b54313116c7763d5efd2da68d95130653e613593df30d5dc5a962af8c40dc1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_add2b194b1410907a281291f91ac138527227132551d9113b6f20437ac0570f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add2b194b1410907a281291f91ac138527227132551d9113b6f20437ac0570f7->enter($__internal_add2b194b1410907a281291f91ac138527227132551d9113b6f20437ac0570f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_7b54313116c7763d5efd2da68d95130653e613593df30d5dc5a962af8c40dc1d->leave($__internal_7b54313116c7763d5efd2da68d95130653e613593df30d5dc5a962af8c40dc1d_prof);

        
        $__internal_add2b194b1410907a281291f91ac138527227132551d9113b6f20437ac0570f7->leave($__internal_add2b194b1410907a281291f91ac138527227132551d9113b6f20437ac0570f7_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_9afe6f91e89f32432602859da521d51fcf8d3822aa25fc65ab47ed8e40c2eebf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9afe6f91e89f32432602859da521d51fcf8d3822aa25fc65ab47ed8e40c2eebf->enter($__internal_9afe6f91e89f32432602859da521d51fcf8d3822aa25fc65ab47ed8e40c2eebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_c581a206fdaae83680e64578f9fb3f87a7e5f5ba7c9ff4266fe322dc3f271570 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c581a206fdaae83680e64578f9fb3f87a7e5f5ba7c9ff4266fe322dc3f271570->enter($__internal_c581a206fdaae83680e64578f9fb3f87a7e5f5ba7c9ff4266fe322dc3f271570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c581a206fdaae83680e64578f9fb3f87a7e5f5ba7c9ff4266fe322dc3f271570->leave($__internal_c581a206fdaae83680e64578f9fb3f87a7e5f5ba7c9ff4266fe322dc3f271570_prof);

        
        $__internal_9afe6f91e89f32432602859da521d51fcf8d3822aa25fc65ab47ed8e40c2eebf->leave($__internal_9afe6f91e89f32432602859da521d51fcf8d3822aa25fc65ab47ed8e40c2eebf_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_53b81609026d116b6f77aca3a3d1f37ce6892765837a2334c337fb21a65daeda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53b81609026d116b6f77aca3a3d1f37ce6892765837a2334c337fb21a65daeda->enter($__internal_53b81609026d116b6f77aca3a3d1f37ce6892765837a2334c337fb21a65daeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_6ec0c82db8acfdf8fde889933e6133ddb3ef3e3d2b77694fe63e99959842d64b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ec0c82db8acfdf8fde889933e6133ddb3ef3e3d2b77694fe63e99959842d64b->enter($__internal_6ec0c82db8acfdf8fde889933e6133ddb3ef3e3d2b77694fe63e99959842d64b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        ob_start();
        // line 8
        echo "    <div class=\"vich-file\">
        ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 10
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 13
        echo "
        ";
        // line 14
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 15
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 17
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_6ec0c82db8acfdf8fde889933e6133ddb3ef3e3d2b77694fe63e99959842d64b->leave($__internal_6ec0c82db8acfdf8fde889933e6133ddb3ef3e3d2b77694fe63e99959842d64b_prof);

        
        $__internal_53b81609026d116b6f77aca3a3d1f37ce6892765837a2334c337fb21a65daeda->leave($__internal_53b81609026d116b6f77aca3a3d1f37ce6892765837a2334c337fb21a65daeda_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_f15779c2f3f8a010f2f7d2bac23f617418b0af2b5e6be1eee679b9559c326808 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f15779c2f3f8a010f2f7d2bac23f617418b0af2b5e6be1eee679b9559c326808->enter($__internal_f15779c2f3f8a010f2f7d2bac23f617418b0af2b5e6be1eee679b9559c326808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_55eff0aaba817ea231f5a7b4e08f3c79b6e5040b3a36e8887caf23630870fe71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55eff0aaba817ea231f5a7b4e08f3c79b6e5040b3a36e8887caf23630870fe71->enter($__internal_55eff0aaba817ea231f5a7b4e08f3c79b6e5040b3a36e8887caf23630870fe71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_55eff0aaba817ea231f5a7b4e08f3c79b6e5040b3a36e8887caf23630870fe71->leave($__internal_55eff0aaba817ea231f5a7b4e08f3c79b6e5040b3a36e8887caf23630870fe71_prof);

        
        $__internal_f15779c2f3f8a010f2f7d2bac23f617418b0af2b5e6be1eee679b9559c326808->leave($__internal_f15779c2f3f8a010f2f7d2bac23f617418b0af2b5e6be1eee679b9559c326808_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_bcd43bd468b0efeea2719ade0132014d54c2c3d435e9378ce4f1c082e3d2bdf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcd43bd468b0efeea2719ade0132014d54c2c3d435e9378ce4f1c082e3d2bdf8->enter($__internal_bcd43bd468b0efeea2719ade0132014d54c2c3d435e9378ce4f1c082e3d2bdf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_db77357c04fa31345748eb7f90d8f59f66688cdf2097048e5689b7cac3f2a409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db77357c04fa31345748eb7f90d8f59f66688cdf2097048e5689b7cac3f2a409->enter($__internal_db77357c04fa31345748eb7f90d8f59f66688cdf2097048e5689b7cac3f2a409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        ob_start();
        // line 28
        echo "    <div class=\"vich-image\">
        ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
        ";
        // line 30
        if ($this->getAttribute(($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "        ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "delete", array()), 'row');
            echo "
        ";
        }
        // line 33
        echo "
        ";
        // line 34
        if ((array_key_exists("download_uri", $context) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 35
            echo "         <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\" alt=\"\" /></a>
        ";
        }
        // line 37
        echo "        ";
        if (((($context["show_download_link"] ?? $this->getContext($context, "show_download_link")) && array_key_exists("download_uri", $context)) && ($context["download_uri"] ?? $this->getContext($context, "download_uri")))) {
            // line 38
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, ($context["download_uri"] ?? $this->getContext($context, "download_uri")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("download", array(), "VichUploaderBundle"), "html", null, true);
            echo "</a>
        ";
        }
        // line 40
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_db77357c04fa31345748eb7f90d8f59f66688cdf2097048e5689b7cac3f2a409->leave($__internal_db77357c04fa31345748eb7f90d8f59f66688cdf2097048e5689b7cac3f2a409_prof);

        
        $__internal_bcd43bd468b0efeea2719ade0132014d54c2c3d435e9378ce4f1c082e3d2bdf8->leave($__internal_bcd43bd468b0efeea2719ade0132014d54c2c3d435e9378ce4f1c082e3d2bdf8_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  197 => 40,  189 => 38,  186 => 37,  178 => 35,  176 => 34,  173 => 33,  167 => 31,  165 => 30,  161 => 29,  158 => 28,  156 => 27,  147 => 26,  137 => 23,  135 => 22,  126 => 21,  114 => 17,  106 => 15,  104 => 14,  101 => 13,  95 => 11,  93 => 10,  89 => 9,  86 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
{% spaceless %}
    <div class=\"vich-file\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
{% spaceless %}
    <div class=\"vich-image\">
        {{ form_widget(form.file) }}
        {% if form.delete is defined %}
        {{ form_row(form.delete) }}
        {% endif %}

        {% if download_uri is defined and download_uri %}
         <a href=\"{{ download_uri }}\"><img src=\"{{ download_uri }}\" alt=\"\" /></a>
        {% endif %}
        {% if show_download_link and download_uri is defined and download_uri%}
        <a href=\"{{ download_uri }}\">{{ 'download'|trans({}, 'VichUploaderBundle') }}</a>
        {% endif %}
    </div>
{% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\vendor\\vich\\uploader-bundle\\Resources\\views\\Form\\fields.html.twig");
    }
}
