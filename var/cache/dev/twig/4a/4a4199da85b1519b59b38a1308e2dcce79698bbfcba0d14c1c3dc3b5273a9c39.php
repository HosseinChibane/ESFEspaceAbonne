<?php

/* @ESFEspaceAbonne/Default/mesDocuments.html.twig */
class __TwigTemplate_9da874b60c585fae9bdd849f4a2348cb2c4c29601777764489080bf91097e42b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/Default/mesDocuments.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_516fde86677d99f16a713a0ce6a3e013940bd720e6130e8ff0938d5a5c96fcf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516fde86677d99f16a713a0ce6a3e013940bd720e6130e8ff0938d5a5c96fcf8->enter($__internal_516fde86677d99f16a713a0ce6a3e013940bd720e6130e8ff0938d5a5c96fcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/mesDocuments.html.twig"));

        $__internal_be7f7c15e4e9d22d5819e6cdee7f7db881cc60d963586da4a93428b841b57e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be7f7c15e4e9d22d5819e6cdee7f7db881cc60d963586da4a93428b841b57e7a->enter($__internal_be7f7c15e4e9d22d5819e6cdee7f7db881cc60d963586da4a93428b841b57e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/Default/mesDocuments.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_516fde86677d99f16a713a0ce6a3e013940bd720e6130e8ff0938d5a5c96fcf8->leave($__internal_516fde86677d99f16a713a0ce6a3e013940bd720e6130e8ff0938d5a5c96fcf8_prof);

        
        $__internal_be7f7c15e4e9d22d5819e6cdee7f7db881cc60d963586da4a93428b841b57e7a->leave($__internal_be7f7c15e4e9d22d5819e6cdee7f7db881cc60d963586da4a93428b841b57e7a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c66f7c182c72305d315c430b5de57a750e534ae66b134bebdac2928958942a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c66f7c182c72305d315c430b5de57a750e534ae66b134bebdac2928958942a9a->enter($__internal_c66f7c182c72305d315c430b5de57a750e534ae66b134bebdac2928958942a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_61cc6b5d2e24747bcec1b34d8513b905fda826a33abb897a3dcf34cd7c9648f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61cc6b5d2e24747bcec1b34d8513b905fda826a33abb897a3dcf34cd7c9648f3->enter($__internal_61cc6b5d2e24747bcec1b34d8513b905fda826a33abb897a3dcf34cd7c9648f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Mes Documents - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_61cc6b5d2e24747bcec1b34d8513b905fda826a33abb897a3dcf34cd7c9648f3->leave($__internal_61cc6b5d2e24747bcec1b34d8513b905fda826a33abb897a3dcf34cd7c9648f3_prof);

        
        $__internal_c66f7c182c72305d315c430b5de57a750e534ae66b134bebdac2928958942a9a->leave($__internal_c66f7c182c72305d315c430b5de57a750e534ae66b134bebdac2928958942a9a_prof);

    }

    // line 7
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_f26b282252d9408e0772bac2c50be9b79493f998b4317aa1c69f40ef01c40201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26b282252d9408e0772bac2c50be9b79493f998b4317aa1c69f40ef01c40201->enter($__internal_f26b282252d9408e0772bac2c50be9b79493f998b4317aa1c69f40ef01c40201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        $__internal_217bb753eed60930487fddd50f909a7070c7add6f725427536ee3da08582f733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217bb753eed60930487fddd50f909a7070c7add6f725427536ee3da08582f733->enter($__internal_217bb753eed60930487fddd50f909a7070c7add6f725427536ee3da08582f733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 8
        echo "    <ol class=\"breadcrumb\">
        <li><a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_monProfil");
        echo "\">Home</a></li>
        <li class=\"active\">Mes Documents</li>
    </ol>
";
        
        $__internal_217bb753eed60930487fddd50f909a7070c7add6f725427536ee3da08582f733->leave($__internal_217bb753eed60930487fddd50f909a7070c7add6f725427536ee3da08582f733_prof);

        
        $__internal_f26b282252d9408e0772bac2c50be9b79493f998b4317aa1c69f40ef01c40201->leave($__internal_f26b282252d9408e0772bac2c50be9b79493f998b4317aa1c69f40ef01c40201_prof);

    }

    // line 14
    public function block_Content($context, array $blocks = array())
    {
        $__internal_9a01089c363dd370b28abffc8bd9a428b600fcbae414d64489a3165394d6f3a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a01089c363dd370b28abffc8bd9a428b600fcbae414d64489a3165394d6f3a1->enter($__internal_9a01089c363dd370b28abffc8bd9a428b600fcbae414d64489a3165394d6f3a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_d852f98f243812d30cdea688a561063aec011139be82c2004dcf363846c0e1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d852f98f243812d30cdea688a561063aec011139be82c2004dcf363846c0e1b2->enter($__internal_d852f98f243812d30cdea688a561063aec011139be82c2004dcf363846c0e1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 

    <!-- Mes Documents -->
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 19
        if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
            // line 20
            echo "        <div class=\"alert alert-error\">
            ";
            // line 21
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "
        </div>
    ";
        }
        // line 24
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"alert alert-info\">
                <strong>Information !</strong> En cas de plusieurs \"bulletins de notes\" ou de \"lettres de recommandation\", merci de les réunir en un seul fichier PDF.
            </div>         
        </div>
        <div class=\"col-md-6\"> 

          <div class=\"form-group\">
            ";
        // line 33
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "PasseportName", array()), 'label', array("label" => "Passeport"));
        echo "
            ";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "PasseportName", array()), 'widget');
        echo "
            ";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "PasseportFile", array()), 'widget');
        echo "

            ";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CarteIdentiteName", array()), 'label', array("label" => "Carte Identite"));
        echo "
            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CarteIdentiteName", array()), 'widget');
        echo "
            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CarteIdentiteFile", array()), 'widget');
        echo "

            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "BacName", array()), 'label', array("label" => "Baccalaureat"));
        echo "
            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "BacName", array()), 'widget');
        echo "
            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "BacFile", array()), 'widget');
        echo "

            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CredentialName", array()), 'label', array("label" => "Crédential / Autre équivalence"));
        echo "
            ";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CredentialName", array()), 'widget');
        echo "
            ";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "CredentialFile", array()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"col-md-6\">          
        <div class=\"form-group\">
            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "BulletinNoteName", array()), 'label', array("label" => "Bulletin de Note"));
        echo "
            ";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "BulletinNoteName", array()), 'widget');
        echo "                
            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "BulletinNoteFile", array()), 'widget');
        echo "

            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "LettreRecommendationName", array()), 'label', array("label" => "Lettres de Recommendation"));
        echo "
            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "LettreRecommendationName", array()), 'widget');
        echo "
            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "LettreRecommendationFile", array()), 'widget');
        echo " 

            ";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "LettreMotivationName", array()), 'label', array("label" => "Lettre de Motivation"));
        echo "
            ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "LettreMotivationName", array()), 'widget');
        echo "
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "LettreMotivationFile", array()), 'widget');
        echo "  
        </div>
    </div>
    ";
        // line 66
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "_token", array()), 'widget');
        echo "
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"form-group\">
                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 71
            echo "                    <div class=\"flash-notice\">
                        ";
            // line 72
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "upload", array()), 'widget');
        echo "
            </div>
        </div>
    </div>


    ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end', array("render_rest" => false));
        echo "

</div>
</div>

";
        
        $__internal_d852f98f243812d30cdea688a561063aec011139be82c2004dcf363846c0e1b2->leave($__internal_d852f98f243812d30cdea688a561063aec011139be82c2004dcf363846c0e1b2_prof);

        
        $__internal_9a01089c363dd370b28abffc8bd9a428b600fcbae414d64489a3165394d6f3a1->leave($__internal_9a01089c363dd370b28abffc8bd9a428b600fcbae414d64489a3165394d6f3a1_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/Default/mesDocuments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 81,  249 => 75,  240 => 72,  237 => 71,  233 => 70,  225 => 66,  219 => 62,  215 => 61,  211 => 60,  206 => 58,  202 => 57,  198 => 56,  193 => 54,  189 => 53,  185 => 52,  177 => 47,  173 => 46,  169 => 45,  164 => 43,  160 => 42,  156 => 41,  151 => 39,  147 => 38,  143 => 37,  138 => 35,  134 => 34,  130 => 33,  119 => 24,  113 => 21,  110 => 20,  108 => 19,  103 => 17,  90 => 14,  76 => 9,  73 => 8,  64 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
    Mes Documents - {{ parent() }}
{% endblock %}

{% block breadcrumb %}
    <ol class=\"breadcrumb\">
        <li><a href=\"{{ path('esf_espace_abonne_monProfil') }}\">Home</a></li>
        <li class=\"active\">Mes Documents</li>
    </ol>
{% endblock %}

{% block Content %} 

    <!-- Mes Documents -->
    {{ form_start(form) }}

    {% if not form.vars.valid %}
        <div class=\"alert alert-error\">
            {{ form_errors(form) }}
        </div>
    {% endif %}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"alert alert-info\">
                <strong>Information !</strong> En cas de plusieurs \"bulletins de notes\" ou de \"lettres de recommandation\", merci de les réunir en un seul fichier PDF.
            </div>         
        </div>
        <div class=\"col-md-6\"> 

          <div class=\"form-group\">
            {{ form_label(form.PasseportName, 'Passeport') }}
            {{ form_widget(form.PasseportName) }}
            {{ form_widget(form.PasseportFile) }}

            {{ form_label(form.CarteIdentiteName, 'Carte Identite') }}
            {{ form_widget(form.CarteIdentiteName) }}
            {{ form_widget(form.CarteIdentiteFile) }}

            {{ form_label(form.BacName, 'Baccalaureat') }}
            {{ form_widget(form.BacName) }}
            {{ form_widget(form.BacFile) }}

            {{ form_label(form.CredentialName, 'Crédential / Autre équivalence') }}
            {{ form_widget(form.CredentialName) }}
            {{ form_widget(form.CredentialFile) }}
        </div>
    </div>
    <div class=\"col-md-6\">          
        <div class=\"form-group\">
            {{ form_label(form.BulletinNoteName, 'Bulletin de Note') }}
            {{ form_widget(form.BulletinNoteName) }}                
            {{ form_widget(form.BulletinNoteFile) }}

            {{ form_label(form.LettreRecommendationName, 'Lettres de Recommendation') }}
            {{ form_widget(form.LettreRecommendationName) }}
            {{ form_widget(form.LettreRecommendationFile) }} 

            {{ form_label(form.LettreMotivationName, 'Lettre de Motivation') }}
            {{ form_widget(form.LettreMotivationName) }}
            {{ form_widget(form.LettreMotivationFile) }}  
        </div>
    </div>
    {# Token CSRF #}
    {{ form_widget(form._token) }}
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"form-group\">
                {% for flash_message in app.session.flashBag.get('notice') %}
                    <div class=\"flash-notice\">
                        {{ flash_message }}
                    </div>
                {% endfor %}
                {{ form_widget(form.upload) }}
            </div>
        </div>
    </div>


    {{ form_end(form, {'render_rest': false}) }}

</div>
</div>

{% endblock %}", "@ESFEspaceAbonne/Default/mesDocuments.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\Default\\mesDocuments.html.twig");
    }
}
